function foo(x) {
  if (x === null || x === undefined) {
    return 0; // Handle null and undefined cases
  }
  return x + 1; // Safe arithmetic operation
}

// Example usage
console.log(foo(5)); // Output: 6
console.log(foo(null)); // Output: 0
console.log(foo(undefined)); // Output: 0