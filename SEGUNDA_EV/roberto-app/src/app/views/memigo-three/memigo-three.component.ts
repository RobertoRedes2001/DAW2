import { Component } from '@angular/core';
import { MemesService } from '../../services/memes.service';
import { MemeItem } from '../../interfaces/memes.interfaces';
import { NgStyle } from '@angular/common';
import { ModalComponent } from '../../components/modal/modal.component';

@Component({
  selector: 'app-memigo-three',
  standalone: true,
  imports: [NgStyle,ModalComponent],
  templateUrl: './memigo-three.component.html',
  styleUrl: './memigo-three.component.css'
})
export class MemigoThreeComponent {
  public memesApproveds : MemeItem[] = [];
  public index : number = 0;
  public name : string = ''
  public avatar : string = '';
  public modal : string = 'modal'
  public constructor(public service : MemesService ){}

  public gitGud():void{
    this.service.getResponse().subscribe((response)=>{
      this.memesApproveds = response.data.memes;
    })
  }

  public nextMeme(){
    if(this.index>=this.memesApproveds.length-1){
      this.index=0;
    }else{
      this.index++;
    }
  }

  public lastMeme(){
    if(this.index!=0){
      this.index--;
    }else{
      this.index=this.memesApproveds.length-1;
    }
  }

  public saveMeme(memeName : string, memeUrl : string){
    this.name = memeName;
    this.avatar = memeUrl;
    this.modal = 'modal show-modal';
  }

  onCloseModal(close:string){
    this.modal = close;
  }

  ngOnInit() : void{
    this.gitGud();
  }
}
