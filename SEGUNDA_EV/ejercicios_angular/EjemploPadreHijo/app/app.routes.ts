import { Routes } from '@angular/router';
import { ViewOneComponent } from './views/view-one/view-one.component';
import { ViewTwoComponent } from './views/view-two/view-two.component';
import { ViewThreeComponent } from './views/view-three/view-three.component';

export const routes: Routes = [
    { path: 'viewOne', component: ViewOneComponent },
    { path: 'viewTwo', component: ViewTwoComponent },
    { path: 'viewThree', component: ViewThreeComponent },
    { path: '', redirectTo: 'viewOne', pathMatch: 'full'}
];
