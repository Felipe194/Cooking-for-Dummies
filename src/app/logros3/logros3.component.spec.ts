import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { Logros3Component } from './logros3.component';

describe('Logros3Component', () => {
  let component: Logros3Component;
  let fixture: ComponentFixture<Logros3Component>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ Logros3Component ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(Logros3Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
