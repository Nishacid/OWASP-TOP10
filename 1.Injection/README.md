# 10 challenges introducing to the OWASP top ten vulnerabilities

These challenges help to understand most common web vulnerabilities.
You will put the theory into practise by completing these challenges.

The OWASP Top 10 is a standard awareness document for developers and web application security. It represents a broad consensus about the most critical security risks to web applications.

https://owasp.org/www-project-top-ten/

## :dart: Injection Challenge

This challenge allows you to learn about the Injection vulnerability.

```
Injection flaws, such as SQL, NoSQL, OS, and LDAP injection, occur when untrusted data is sent to an interpreter as part of a command or query. The attacker’s hostile data can trick the interpreter into executing unintended commands or accessing data without proper authorization.
```

## :hammer_and_wrench: Installation

```
git clone https://github.com/Nishacid/OWASP-TOP10.git
cd 1.Injection/
docker-compose up --build -d
```
Now, go to [127.0.0.1:8001](http://127.0.0.1:8001) and enjoy 