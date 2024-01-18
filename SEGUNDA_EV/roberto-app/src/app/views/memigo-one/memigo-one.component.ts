import { Component } from '@angular/core';
import { MemesService } from '../../services/memes.service';

@Component({
  selector: 'app-memigo-one',
  standalone: true,
  imports: [],
  templateUrl: './memigo-one.component.html',
  styleUrl: './memigo-one.component.css'
})
export class MemigoOneComponent {
  public constructor(public service : MemesService ){}
}
