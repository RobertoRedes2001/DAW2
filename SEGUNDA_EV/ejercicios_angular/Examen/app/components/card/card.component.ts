import { Component, EventEmitter, Input, Output  } from '@angular/core';

@Component({
  selector: 'app-card',
  standalone: true,
  imports: [],
  templateUrl: './card.component.html',
  styleUrl: './card.component.css'
})
export class CardComponent {
  @Input() name : string = '';
  @Input() status : string = '';
  @Input() photo : string = '';
  @Input() aditionalInfo : string[] = [];

  @Output() modal = new EventEmitter<{modal : string, viewModal : boolean}>;

  onModal(){
    this.modal.emit({modal : "modal show-modal", viewModal: true})
  }

}
