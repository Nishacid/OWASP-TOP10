# 10 challenges introducing to the OWASP top ten vulnerabilities

These challenges help to understand most common web vulnerabilities.
You will put the theory into practise by completing these challenges.

The OWASP Top 10 is a standard awareness document for developers and web application security. It represents a broad consensus about the most critical security risks to web applications.

https://owasp.org/www-project-top-ten/

## :dart: Sensitive Data Exposure Challenge

This challenge allows you to learn about the Sensitive Data Exposure vulnerability.

```
Many web applications and APIs do not properly protect sensitive data, such as financial, healthcare, and PII. Attackers may steal or modify such weakly protected data to conduct credit card fraud, identity theft, or other crimes. Sensitive data may be compromised without extra protection, such as encryption at rest or in transit, and requires special precautions when exchanged with the browser.
```

## :hammer_and_wrench: Installation

```
git clone https://github.com/Nishacid/OWASP-TOP10.git
cd 3.Sensitive_Data_Exposure/
docker-compose up --build -d
```
Now, go to [127.0.0.1:8003](http://127.0.0.1:8003) and enjoy 