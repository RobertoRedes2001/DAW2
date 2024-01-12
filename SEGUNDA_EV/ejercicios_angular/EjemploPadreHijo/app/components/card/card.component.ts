import { Component, Output, EventEmitter } from '@angular/core';

@Component({
  selector: 'app-card',
  standalone: true,
  imports: [],
  templateUrl: './card.component.html',
  styleUrl: './card.component.css'
})
export class CardComponent {
  @Output() data = new EventEmitter<string>();

  public onClick(): void {
    this.data.emit('The text we emit from the component');
  }
}
