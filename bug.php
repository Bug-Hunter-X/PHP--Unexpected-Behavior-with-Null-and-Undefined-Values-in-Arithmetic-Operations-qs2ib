function foo(x) {
  if (x === null) {
    return 0; // Handle null case
  }
  return x + 1; // Potential issue here
}

// Example usage
console.log(foo(5)); // Output: 6
console.log(foo(null)); // Output: 0
console.log(foo(undefined)); // Output: NaN (potential error)