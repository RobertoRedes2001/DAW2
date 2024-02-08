import { Routes } from '@angular/router';
import { ViewOneComponent } from './views/view-one/view-one.component';
import { ViewTwoComponent } from './views/view-two/view-two.component';
import { ViewThreeComponent } from './views/view-three/view-three.component';

export const routes: Routes = [
    { path: 'view1', component: ViewOneComponent },
    { path: '', pathMatch: 'full', redirectTo: 'view1' },
    { path: 'view2', component: ViewTwoComponent },
    { path: 'view3', component: ViewThreeComponent },
];
