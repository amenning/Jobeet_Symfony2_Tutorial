<?php

/* EnsJobeetBundle:Default:login.html.twig */
class __TwigTemplate_5c900c69a7c954e4c6d2f23618bb47865b3c77450ce2af6dff795562683215f2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_1c773a94a2b8ef1b4851414652cb1e8db6a9f619fcdb7bc0cf7c20533337fd1d = $this->env->getExtension("native_profiler");
        $__internal_1c773a94a2b8ef1b4851414652cb1e8db6a9f619fcdb7bc0cf7c20533337fd1d->enter($__internal_1c773a94a2b8ef1b4851414652cb1e8db6a9f619fcdb7bc0cf7c20533337fd1d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "EnsJobeetBundle:Default:login.html.twig"));

        // line 1
        if ((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error"))) {
            // line 2
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : $this->getContext($context, "error")), "message", array()), "html", null, true);
            echo "</div>
";
        }
        // line 4
        echo "
<form action=\"";
        // line 5
        echo $this->env->getExtension('routing')->getPath("login_check");
        echo "\" method=\"post\">
\t<label for=\"username\">Username:</label>
\t<input type=\"text\" id=\"username\" name=\"_username\" value=\"";
        // line 7
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : $this->getContext($context, "last_username")), "html", null, true);
        echo "\" />
\t
\t<label for=\"password\">Password:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t
\t<button type=\"submit\">login</button>
</form>";
        
        $__internal_1c773a94a2b8ef1b4851414652cb1e8db6a9f619fcdb7bc0cf7c20533337fd1d->leave($__internal_1c773a94a2b8ef1b4851414652cb1e8db6a9f619fcdb7bc0cf7c20533337fd1d_prof);

    }

    public function getTemplateName()
    {
        return "EnsJobeetBundle:Default:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  38 => 7,  33 => 5,  30 => 4,  24 => 2,  22 => 1,);
    }
}
/* {% if error %}*/
/* 	<div>{{ error.message }}</div>*/
/* {% endif %}*/
/* */
/* <form action="{{ path('login_check') }}" method="post">*/
/* 	<label for="username">Username:</label>*/
/* 	<input type="text" id="username" name="_username" value="{{ last_username }}" />*/
/* 	*/
/* 	<label for="password">Password:</label>*/
/* 	<input type="password" id="password" name="_password" />*/
/* 	*/
/* 	<button type="submit">login</button>*/
/* </form>*/
