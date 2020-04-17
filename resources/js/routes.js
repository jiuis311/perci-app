import userRoutes from './views/user';
import offerRoutes from './views/offer';
import reportRoutes from './views/report';
import pricingRoutes from './views/pricing';
import helpRoutes from './views/help';
import dashboardRoutes from "./views/dashboard";
import tutorialRoutes from "./views/tutorial";

export default [
    ...userRoutes,
    ...offerRoutes,
    ...reportRoutes,
    ...pricingRoutes,
    ...helpRoutes,
    ...dashboardRoutes,
    ...tutorialRoutes
]
