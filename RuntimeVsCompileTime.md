#### Compile time vs Runtime

- Compile-time is the time at which the source code is converted into an executable code
    - The compile-time errors can be:
        - Syntax errors
        - Typechecking errors
- Runtime is the time at which the executable code is started running. 
  - The run-time errors (often referred as Exceptions) can be:
    - Division by zero
    - Running out of memory

#### OPcache

- In a typical PHP environment with no opcode caching, the "compilation" step and the "run-time" step are indistinguishable
- However, when you introduce an "accelerator/opcode cache" like APC or the Zend Platform product, you can see that these are separate steps in the process.