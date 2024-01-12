import { Component } from '@angular/core';
import { ArticleComponent } from '../../components/article/article.component';

@Component({
  selector: 'app-view-three',
  standalone: true,
  imports: [ArticleComponent],
  templateUrl: './view-three.component.html',
  styleUrl: './view-three.component.css'
})
export class ViewThreeComponent {
  public text: string = 'The best beer';
  public title: string = 'Lager beer';
  public textTwo: string = 'The perfect draft beer poured for you';
  public titleTwo: string = 'Draft beer';

  public onClick(chain: string): void {
    this.title = chain;
    this.titleTwo = chain;
  }
}
