import { Component } from '@angular/core';
import { GithubService } from '../../services/github.service';
import { GitHubItem } from '../../interfaces/github.interfaces';
import { NgStyle } from '@angular/common';

@Component({
  selector: 'app-github-one',
  standalone: true,
  imports: [NgStyle],
  templateUrl: './github-one.component.html',
  styleUrl: './github-one.component.css'
})
export class GithubOneComponent {
  public constructor(public service : GithubService ){}
  public gitProfiles : GitHubItem[] = [];
  public clicked : boolean = false;
  public gitGud():void{
    this.service.getResponse("github").subscribe((response)=>{
      this.gitProfiles = response.items;
      console.log(this.gitProfiles[0]);
    })
  }

  ngOnInit(){
    this.gitGud()
  }
}
