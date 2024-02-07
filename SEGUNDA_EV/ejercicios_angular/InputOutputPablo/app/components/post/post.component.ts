import { NgClass, NgStyle } from '@angular/common';
import { Component, Input, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-post',
  standalone: true,
  imports: [NgClass, NgStyle],
  templateUrl: './post.component.html',
  styleUrl: './post.component.css'
})
export class PostComponent {
  @Input() title: string = "My Title";
  @Input() photo: string = "My Photo";
  @Output() data = new EventEmitter<{title: string, photo: string}>();

  public onClickChange() : void {
    this.data.emit({title: this.title, photo: this.photo});
  }
}
