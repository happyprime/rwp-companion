{
	// build a tabset from a section div with the .tabset class

	/**
	 * Build a tabset from a section div with the .tabset class.
	 *
	 * @param {*} tabset
	 */
	const buildTabset = (tabset) => {
		// Determine the heading level to use.
		const match = tabset.className.match(/level(\d) /);
		if (!match) {
			return;
		}

		const tabsetLevel = Number(match[1]);
		const tabLevel = tabsetLevel + 1;

		// Find all subheadings.
		const tabs = tabset.querySelectorAll('div.section.level' + tabLevel);

		if (!tabs.length) {
			return;
		}

		const fade = tabset.classList.contains('tabset-fade');
		const pills = tabset.classList.contains('tabset-pills');
		const navClass = pills ? 'nav-pills' : 'nav-tabs';

		// create tablist and tab-content elements
		const tabList = document.createElement('ul');

		tabList.className = 'nav ' + navClass;
		tabList.setAttribute('role', 'tablist');

		tabs[0].parentNode.insertBefore(tabList, tabs[0]);

		const tabContent = document.createElement('div');

		tabContent.className = 'tab-content';

		tabs[0].parentNode.insertBefore(tabContent, tabs[0]);

		tabs.forEach(function (tab) {
			// get the id then sanitize it for use with bootstrap tabs
			let id = tab.id;

			// sanitize the id for use with bootstrap tabs
			id = id.replace(/[.\/?&!#<>]/g, '').replace(/\s/g, '_');
			tab.id = id;

			// get the heading element within it, grab it's text, then remove it
			const heading = tab.querySelector('h' + tabLevel);
			const headingText = heading.innerHTML;

			heading.remove();

			// build and append the tab list item
			const anchor = document.createElement('a');

			anchor.innerText = headingText;
			anchor.href = '#' + id;
			anchor.setAttribute('role', 'tab');
			anchor.setAttribute('data-toggle', 'tab');
			anchor.setAttribute('aria-controls', id);

			const listItem = document.createElement('li');

			listItem.setAttribute('role', 'presentation');
			listItem.appendChild(anchor);

			tabList.appendChild(listItem);

			// set it's attributes
			tab.setAttribute('role', 'tabpanel');
			tab.classList.add('tab-pane');
			tab.classList.add('tabbed-pane');

			if (fade) {
				tab.classList.add('fade');
			}

			// move it into the tab content div
			tabContent.appendChild(tab);
		});

		// set active tab
		const tableListItems = tabList.querySelectorAll('li ');

		tableListItems[0].classList.add('active');

		const tableSections = tabContent.querySelectorAll('.section');
		const active = tableSections[0];

		active.classList.add('active');
		if (fade) {
			active.classList.add('in');
		}

		tableListItems.forEach((el) => {
			el.addEventListener('click', (event) => {
				event.preventDefault();

				tableListItems.forEach((listItem) => {
					listItem.classList.remove('active');
				});

				tableSections.forEach((section) => {
					section.classList.remove('active');
				});

				event.target.parentNode.classList.add('active');
				tabContent
					.querySelector(
						'#' + event.target.getAttribute('aria-controls')
					)
					.classList.add('active');
			});
		});
	};

	window.addEventListener('DOMContentLoaded', () => {
		// convert section divs with the .tabset class to tabsets
		const tabsets = document.querySelectorAll('.section.tabset');

		tabsets.forEach((tabset) => {
			buildTabset(tabset);
		});
	});
}
