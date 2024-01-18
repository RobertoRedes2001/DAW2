import { Component } from '@angular/core';
import { GithubService } from '../../services/github.service';

@Component({
  selector: 'app-github-one',
  standalone: true,
  imports: [],
  templateUrl: './github-one.component.html',
  styleUrl: './github-one.component.css'
})
export class GithubOneComponent {
  public constructor(public service : GithubService ){}
  
}
