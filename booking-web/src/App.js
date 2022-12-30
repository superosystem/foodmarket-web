import {
  createBrowserRouter,
  RouterProvider,
} from 'react-router-dom';

import Home from './pages/home/Home';
import Hotel from './pages/hotel/Hotel';
import Hotels from './pages/hotels/Hotels';

function App() {
  const routes = createBrowserRouter([
    {
      path: '/',
      element: <Home />
    },
    {
      path: '/hotels',
      element: <Hotels />
    },
    {
      path: '/hotels/:id',
      element: <Hotel />
    },
  ]);

  return (
    <RouterProvider router={routes} />
  );
}

export default App;
