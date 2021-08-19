# ✨Composing Methods
## Extract Method
### Problem
```sh
function printOwing() {
  $this->printBanner();

  // Print details.
  print("name:  " . $this->name);
  print("amount " . $this->getOutstanding());
}
```
### Solution
```sh
function printOwing() {
  $this->printBanner();
  $this->printDetails($this->getOutstanding());
}
function printDetails($outstanding) {
  print("name:  " . $this->name);
  print("amount " . $outstanding);
}
```
### Benefits
- More readability, fewer long-winded comments
- Less code duplication

## Inline Method
### Problem
```sh
function getRating() {
  return ($this->moreThanFiveLateDeliveries()) ? 2 : 1;
}
function moreThanFiveLateDeliveries() {
  return $this->numberOfLateDeliveries > 5;
}
```
### Solution
```sh
function getRating() {
  return ($this->numberOfLateDeliveries > 5) ? 2 : 1;
}
```
### Benefits
- Code more straightforward

## Extract Variable
### Problem
```sh
if (($platform->toUpperCase()->indexOf("MAC") > -1) &&
     ($browser->toUpperCase()->indexOf("IE") > -1) &&
      $this->wasInitialized() && $this->resize > 0)
{
  // do something
}
```
### Solution
```sh
$isMacOs = $platform->toUpperCase()->indexOf("MAC") > -1;
$isIE = $browser->toUpperCase()->indexOf("IE")  > -1;
$wasResized = $this->resize > 0;

if ($isMacOs && $isIE && $this->wasInitialized() && $wasResized) {
  // do something
}
```
### Benefits
- More readability, fewer long-winded comments
### Drawbacks
- Might hurt performance (will remove)