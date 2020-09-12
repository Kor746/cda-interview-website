import Vue from 'vue';
import Router from 'vue-router';

Vue.use(Router);

import mainPage from './components/pages/MainPage';
import contactPage from './components/pages/ContactPage';

const routes = [
	{
		path: '/',
		component: mainPage
	},
	{
		path: '/index',
		component: mainPage
	},
	{
		path: '/contact-us',
		component: contactPage
	}
];

export default new Router({
	mode: 'history',
	routes
});