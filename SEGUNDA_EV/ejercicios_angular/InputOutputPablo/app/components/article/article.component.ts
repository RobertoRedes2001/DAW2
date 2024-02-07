import { NgStyle } from '@angular/common';
import { Component, Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-article',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './article.component.html',
  styleUrl: './article.component.css'
})
export class ArticleComponent {
  @Input() title: string = "My Title";
  @Input() description: string = "My Description";
  @Input() photo: string = "My Photo";
  @Output() data = new EventEmitter<{title: string, photo: string }>();

  public onClick() : void {
    this.data.emit({title: this.title, photo: this.photo});
  }
}
