import { Component, EventEmitter, Input, Output } from '@angular/core';
import { NgStyle } from '@angular/common';



@Component({
  selector: 'app-content',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './content.component.html',
  styleUrl: './content.component.css'
})
export class ContentComponent {
  @Input() firstPhoto: string = '';
  @Input() secondPhoto?: string = '';
  @Input() subtext: string = '';
  @Input() firstPhotoStyle: string = '';
  @Input() secondPhotoStyle?: string = '';
  @Input() displayClass?: string = '';
  public clicked: boolean = false;
  @Input() view : string = '';
  @Output() changeOne = new EventEmitter<{ class: string; style: string }>();
  @Output() changeTwo = new EventEmitter<{ class: string; style: string }>();
  @Output() apiRequest = new EventEmitter<string>();

  public changeStyleOne() {
    if (this.clicked) {
      this.clicked = false;
      this.secondPhotoStyle = 'inline-block';
      this.displayClass = 'image-container2';
      this.changeOne.emit({ class: this.displayClass, style: this.firstPhotoStyle || '' });
    } else {
      this.clicked = true;
      this.secondPhotoStyle = 'none';
      this.displayClass = 'image-container';
      this.changeOne.emit({ class: this.displayClass, style: this.firstPhotoStyle || '' });
    }
  }

  public changeStyleTwo() {
    if (this.clicked) {
      this.clicked = false;
      this.firstPhotoStyle = 'inline-block';
      this.displayClass = 'image-container2';
      this.changeTwo.emit({ class: this.displayClass, style: this.secondPhotoStyle || '' });
    } else {
      this.clicked = true;
      this.firstPhotoStyle = 'none';
      this.displayClass = 'image-container';
      this.changeTwo.emit({ class: this.displayClass, style: this.secondPhotoStyle || '' });
    }
  }

  public loadRick(){
    this.apiRequest.emit("Rick");
  }

  public loadMorty(){
    this.apiRequest.emit("Morty");
  }
  
}
