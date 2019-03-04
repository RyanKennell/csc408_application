import PageMovies from './components/pages/Movies';
import PageSuppliers from './components/pages/Suppliers';

const router = new VueRouter({
   routes: [
       {
           path: '/app/movies',
           component: PageMovies
       },
       {
           path: '/app/suppliers',
           component: PageSuppliers
       }
   ]
});