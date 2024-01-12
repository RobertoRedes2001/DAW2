import { Component } from '@angular/core';
import { PostComponent } from '../../components/post/post.component';

@Component({
  selector: 'app-view-one',
  standalone: true,
  imports: [PostComponent],
  templateUrl: './view-one.component.html',
  styleUrl: './view-one.component.css'
})
export class ViewOneComponent {
  public title: string = 'Cheese Burger';
  public text: string = 'Our choice! The best burger in the world...';
  public titleTwo: string = 'BBQ Burger';
  public textTwo: string = 'Only the brave...';

}
