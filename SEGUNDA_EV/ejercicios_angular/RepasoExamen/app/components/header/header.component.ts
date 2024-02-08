import { NgStyle } from '@angular/common';
import { Component } from '@angular/core';
import { RouterLink, RouterLinkActive } from '@angular/router';

@Component({
  selector: 'app-header',
  standalone: true,
  imports: [RouterLink, RouterLinkActive,NgStyle],
  templateUrl: './header.component.html',
  styleUrl: './header.component.css'
})

export class HeaderComponent {
  public banner : { name: string, image: string }[] = [
    {name : "Vista Uno", image : "https://static.eldiario.es/clip/0a1ee554-bcf7-4c32-9c2a-37e76297ef6f_16-9-discover-aspect-ratio_default_0.jpg"},
    {name : "Vista Dos", image : "https://houseofweed.cl/cdn/shop/collections/banner-rick-and-morty.jpg?v=1653407010"}
  ];
  public pos : number = 0;
  public classOne : string = "nav-link logo";
  public classTwo : string = "nav-link";

  onChangeViewOne(){
    this.pos = 0;
    this.classOne = "nav-link logo";
    this.classTwo = "nav-link";
  }

  onChangeViewTwo(){
    this.pos = 1;
    this.classOne = "nav-link";
    this.classTwo = "nav-link logo";
  }

}
