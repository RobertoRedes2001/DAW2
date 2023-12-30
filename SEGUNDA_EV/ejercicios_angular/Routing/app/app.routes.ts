import { Routes } from '@angular/router';
import { HemisfericComponent } from './views/hemisferic/hemisferic.component';
import { MuseuComponent } from './views/museu/museu.component';

export const routes: Routes = [
    { path: '', redirectTo: 'museu', pathMatch: 'full' },
    { path: 'museu', component: MuseuComponent },
    { path: 'hemisferic', component: HemisfericComponent },
];
