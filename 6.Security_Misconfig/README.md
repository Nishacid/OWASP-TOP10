# 10 challenges introducing to the OWASP top ten vulnerabilities

These challenges help to understand most common web vulnerabilities.
You will put the theory into practise by completing these challenges.

The OWASP Top 10 is a standard awareness document for developers and web application security. It represents a broad consensus about the most critical security risks to web applications.

https://owasp.org/www-project-top-ten/

## :dart: Security Misconfiguration Challenge

This challenge allows you to learn about the Security Misconfiguration vulnerability.

```
Security misconfiguration is the most commonly seen issue. This is commonly a result of insecure default configurations, default accounts and their passwords still enabled and unchanged, incomplete or ad hoc configurations, open cloud storage, misconfigured HTTP headers, and verbose error messages containing sensitive information. Not only must all operating systems, frameworks, libraries, and applications be securely configured, but they must be patched/upgraded in a timely fashion.
```

## :hammer_and_wrench: Installation

```
git clone https://github.com/Nishacid/OWASP-TOP10.git
cd 6.Security_Misconfig
docker build -t owasp6 .
docker run -d --name owasp6 -p 8006:80 owasp6
```
Now, go to [127.0.0.1:8006](http://127.0.0.1:8006) and enjoy 
