# CSS

## What is CSS ?

- Not a programming language
- Styling language
- Used for presentation
- Depends on creativity of the developer

## CSS Syntax

```css
selector {
  property1: value1;
  property2: value2;
  property3: value3;
}

/* Example  */
h1 {
  color: teal;
}
```

## CSS Selectors

- Element
- Class
- ID

```css
/* element selector */

body {
  background: #f2f2f2;
}

/* id selector: do note the pound or hash sign */
#heading-1 {
  color: crimson;
}

/* class selector: note the dot before class name  */
.color-primary {
  color: #e33442;
}
```

## Selector combinations

```html
<div class="parent">
  <span id="child-1">Child 1</span>
  <span id="child-2">Child 2</span>
</div>
```

```css
.parent {
  background: #2f2f2f;
}

.parent span {
  font-size: 2rem;
}

.parent #child-2 {
  color: blue;
}

/* any number of combinations and nesting like this is possible */
```

<hr>

```html
<div class="parent">
  <div>
    <div>
      <span>Some random text</span>
    </div>
    <div>
      <span>Some random text</span>
    </div>
  </div>
  <div class="cool">
    <div>
      <span>Some random text</span>
    </div>
    <div>
      <span class="cooler">Some random text</span>
    </div>
  </div>
</div>
```

```css
.parent {
  background: rebeccapurple;
  color: white;
  padding: 2rem;
}

/* .parent div {
  background: gray;
  border: solid 2px black;
  width: 500px;
  height: 100px;
  margin: 10px;
} */

.parent > div {
  background: gray;
  border: solid 2px black;
  width: 500px;
  height: 100px;
  margin: 10px;
}

div span {
  font-size: 2.3rem;
}

div.cool span {
  color: blue;
}

div.cool span.cooler {
  color: lightblue;
}

/* selecting everything */
* {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
```

## Adding CSS to an HTML File

### Style Tag

```html
<html>
  <head>
    ...

    <style>
      body {
        background: gray;
      }
    </style>
  </head>

  ...
</html>
```

### External CSS file

- Create a file with `.css` extension, say `main.css`
- Use `link` tag to add that css file to HTML

```html
<html>
  <head>
    <link rel="stylesheet" href="./main.css" />
    ...
  </head>
  ...
</html>
```

```css
/* main.css */

body {
  background: crimson;
  color: white;
}
```

### Inline styling
- Write css within html tags as `style` attribute

```html
<h1 style="color:crimson; font-size: 2.2rem;">Hello World</h1>
```
`Out of all, inline styling has the most precedence`
