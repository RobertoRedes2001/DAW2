import { NgStyle } from '@angular/common';
import { Component, EventEmitter, Input, Output } from '@angular/core';

@Component({
  selector: 'app-modal',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './modal.component.html',
  styleUrl: './modal.component.css'
})
export class ModalComponent {
  @Input() name : string = ''
  @Input() picture : string = '';
  @Input() modal : string = '';
  @Input() aditionalInfo ? : string[] = [];

  @Output() closeModal = new EventEmitter<string>(); 
  
  public onCloseModal() : void{
    this.closeModal.emit('modal');
  }
}
