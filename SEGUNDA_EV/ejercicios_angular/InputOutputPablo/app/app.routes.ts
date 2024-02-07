import { Routes } from '@angular/router';
import { FrutasComponent } from './views/frutas/frutas.component';
import { PescadosComponent } from './views/pescados/pescados.component';
import { VerdurasComponent } from './views/verduras/verduras.component';

export const routes: Routes = [
    { path: '', redirectTo: 'frutas', pathMatch: 'full' },
    { path: 'frutas', component: FrutasComponent },
    { path: 'pescados', component: PescadosComponent },
    { path: 'verduras', component: VerdurasComponent },
];
