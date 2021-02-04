# 10 challenges introducing to the OWASP top ten vulnerabilities

These challenges help to understand most common web vulnerabilities.
You will put the theory into practise by completing these challenges.

The OWASP Top 10 is a standard awareness document for developers and web application security. It represents a broad consensus about the most critical security risks to web applications.

https://owasp.org/www-project-top-ten/

## :dart: XML External Entities Challenge

This challenge allows you to learn about the XML External Entities (XXE) vulnerability.

```
Many older or poorly configured XML processors evaluate external entity references within XML documents. External entities can be used to disclose internal files using the file URI handler, internal file shares, internal port scanning, remote code execution, and denial of service attacks.
```

## :hammer_and_wrench: Installation

```
git clone https://github.com/Nishacid/OWASP-TOP10.git
cd 3.XML_External_Entities/
docker build -t owasp4 .
docker run -d --name owasp4 -p 8004:80 owasp4
```
Now, go to [127.0.0.1:8004](http://127.0.0.1:8004) and enjoy 