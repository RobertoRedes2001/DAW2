import { Component, Output, EventEmitter, Input } from '@angular/core';
import { NgClass, NgStyle } from '@angular/common';

@Component({
  selector: 'app-modal',
  standalone: true,
  imports: [NgClass, NgStyle],
  templateUrl: './modal.component.html',
  styleUrl: './modal.component.css'
})
export class ModalComponent {
  @Input() modalName: string = 'Modal Name';
  @Input() photoName: string = 'Photo Name';
  @Input() className: string = 'modal';
  @Output() closeModal = new EventEmitter<string>();

  public onCloseModal() : void {
    this.closeModal.emit('modal');
  }


}
