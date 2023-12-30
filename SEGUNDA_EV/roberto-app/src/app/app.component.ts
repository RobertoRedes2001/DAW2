import { Component } from '@angular/core';
import { CommonModule } from '@angular/common';
import { RouterOutlet } from '@angular/router';
import { HeaderComponent } from './components/header/header.component';
import { BannerComponent } from './components/banner/banner.component';
import { HomeComponent } from './views/home/home.component';
import { LongtermComponent } from './views/longterm/longterm.component';
import { ShorttermComponent } from './views/shortterm/shortterm.component';
import { GameComponent } from './views/game/game.component';
import { FooterComponent } from './components/footer/footer.component';

@Component({
  selector: 'app-root',
  standalone: true,
  imports: [CommonModule, RouterOutlet,HeaderComponent,BannerComponent,
    HomeComponent, LongtermComponent, ShorttermComponent, GameComponent,
    FooterComponent],
  templateUrl: './app.component.html',
  styleUrl: './app.component.css'
})
export class AppComponent {

}
