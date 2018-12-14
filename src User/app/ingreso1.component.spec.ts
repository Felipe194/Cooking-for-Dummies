import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { ingreso1 } from './ingreso1.component';

describe('ingreso1Component', () => {
  let component: ingreso1Component;
  let fixture: ComponentFixture<ingreso1Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ ingreso1Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(ingreso1Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});