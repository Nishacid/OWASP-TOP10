# 10 challenges introducing to the OWASP top ten vulnerabilities

These challenges help to understand most common web vulnerabilities.
You will put the theory into practise by completing these challenges.

The OWASP Top 10 is a standard awareness document for developers and web application security. It represents a broad consensus about the most critical security risks to web applications.

https://owasp.org/www-project-top-ten/

## :dart: Broken Authentication Challenge

This challenge allows you to learn about the Broken Authentication vulnerability.

```
Application functions related to authentication and session management are often implemented incorrectly, allowing attackers to compromise passwords, keys, or session tokens, or to exploit other implementation flaws to assume other users’ identities temporarily or permanently.
```

## :hammer_and_wrench: Installation

```
git clone https://github.com/Nishacid/OWASP-TOP10.git
cd 2.Broken_Auth/
docker build -t owasp2 .
docker run -d --name owasp2 -p 8002:80 owasp2
```
Now, go to [127.0.0.1:8002](http://127.0.0.1:8002) and enjoy 