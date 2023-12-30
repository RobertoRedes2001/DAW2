import { Routes } from '@angular/router';
import { HomeComponent } from './views/home/home.component';
import { LongtermComponent } from './views/longterm/longterm.component';
import { ShorttermComponent } from './views/shortterm/shortterm.component';
import { GameComponent } from './views/game/game.component';

export const routes: Routes = [
    { path: '', redirectTo: 'home', pathMatch: 'full' },
    { path: 'home', component: HomeComponent },
    { path: '', redirectTo: 'longterm', pathMatch: 'full' },
    { path: 'longterm', component: LongtermComponent },
    { path: '', redirectTo: 'shortterm', pathMatch: 'full' },
    { path: 'shortterm', component: ShorttermComponent },
    { path: '', redirectTo: 'game', pathMatch: 'full' },
    { path: 'game', component: GameComponent },
];
