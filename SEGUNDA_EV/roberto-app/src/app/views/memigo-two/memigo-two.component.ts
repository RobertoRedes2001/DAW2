import { Component } from '@angular/core';
import { MemesService } from '../../services/memes.service';
import { MemeItem } from '../../interfaces/memes.interfaces';
import { NgStyle } from '@angular/common';

@Component({
  selector: 'app-memigo-two',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './memigo-two.component.html',
  styleUrl: './memigo-two.component.css'
})
export class MemigoTwoComponent {
  public memesApproveds : MemeItem[] = [];
  public index : number = 0;
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

  ngOnInit() : void{
    this.gitGud();
  }
}
