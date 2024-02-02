import { ComponentFixture, TestBed } from '@angular/core/testing';

import { GithubOneComponent } from './github-one.component';

describe('GithubOneComponent', () => {
  let component: GithubOneComponent;
  let fixture: ComponentFixture<GithubOneComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [GithubOneComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(GithubOneComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
