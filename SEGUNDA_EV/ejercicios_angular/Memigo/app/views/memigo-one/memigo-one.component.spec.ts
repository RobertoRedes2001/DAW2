import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MemigoOneComponent } from './memigo-one.component';

describe('MemigoOneComponent', () => {
  let component: MemigoOneComponent;
  let fixture: ComponentFixture<MemigoOneComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      imports: [MemigoOneComponent]
    })
    .compileComponents();
    
    fixture = TestBed.createComponent(MemigoOneComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
