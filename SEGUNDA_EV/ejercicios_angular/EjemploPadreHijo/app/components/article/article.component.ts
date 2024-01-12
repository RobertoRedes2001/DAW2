import { Component, Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-article',
  standalone: true,
  imports: [],
  templateUrl: './article.component.html',
  styleUrl: './article.component.css'
})
export class ArticleComponent {
  @Input() title = 'Hello';
  @Input() text = 'World';
  @Output() data = new EventEmitter<string>();

  public onClick(): void {
      this.data.emit('My new title');
  }
}
