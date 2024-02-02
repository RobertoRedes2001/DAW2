import { Component } from '@angular/core';
import { MemesService } from '../../services/memes.service';
import { MemeItem } from '../../interfaces/memes.interfaces';
import { NgStyle } from '@angular/common';

@Component({
  selector: 'app-memigo-one',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './memigo-one.component.html',
  styleUrl: './memigo-one.component.css'
})
export class MemigoOneComponent {

  public memesApproveds : MemeItem[] = [];

  public constructor(public service : MemesService ){}

  public gitGud():void{
    this.service.getResponse().subscribe((response)=>{
      this.memesApproveds = response.data.memes;
    })
  }

  ngOnInit() : void{
    this.gitGud();
  }

}
