import { Routes } from '@angular/router';
import { GithubOneComponent } from './views/github-one/github-one.component';
import { GithubTwoComponent } from './views/github-two/github-two.component';
import { MemigoOneComponent } from './views/memigo-one/memigo-one.component';
import { MemigoTwoComponent } from './views/memigo-two/memigo-two.component';
import { MemigoThreeComponent } from './views/memigo-three/memigo-three.component';

export const routes: Routes = [
    { path: 'github1', component: GithubOneComponent },
    { path: '', pathMatch: 'full', redirectTo: 'github1' },
    { path: 'github2', component: GithubTwoComponent },
    { path: 'memigo1', component: MemigoOneComponent },
    { path: 'memigo2', component: MemigoTwoComponent },
    { path: 'memigo3', component: MemigoThreeComponent },
];
