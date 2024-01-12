import { Component } from '@angular/core';
import { CardComponent } from '../../components/card/card.component';
import { ArticleComponent } from '../../components/article/article.component';

@Component({
  selector: 'app-view-two',
  standalone: true,
  imports: [CardComponent, ArticleComponent],
  templateUrl: './view-two.component.html',
  styleUrl: './view-two.component.css'
})
export class ViewTwoComponent {

  public onClick(chain: string): void {
    alert(chain);
  }
}
