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
  
}
