import { Component } from '@angular/core';

@Component({
  selector: 'app-article',
  standalone: true,
  imports: [],
  templateUrl: './article.component.html',
  styleUrl: './article.component.css'
})
export class ArticleComponent {
  ngOnInit() {
    let image = document.getElementsByTagName('img')[0];
    let paragraph = document.getElementsByTagName('p')[0];
    image.addEventListener("mouseover", () => {
      image.src = "https://www.spain.info/.content/images/cabeceras-grandes/comunidad-valenciana/ciudad-artes-ciencias-noche-valencia-pexel256150.jpg";
    });
    image.addEventListener("mouseout", () => {
      image.src = "https://s3.ppllstatics.com/lasprovincias/www/multimedia/201811/13/media/cortadas/cacsa-k9eC--624x385@Las%20Provincias.jpg";
    });
    paragraph.addEventListener("mouseover", () => {
      paragraph.style.color = "blue";
    });
    paragraph.addEventListener("mouseout", () => {
      paragraph.style.color = "black";
    });
  };
}

