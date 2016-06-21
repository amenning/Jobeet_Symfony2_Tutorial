<?php

/* @EnsJobeet/Default/login.html.twig */
class __TwigTemplate_8f43a8fe34bc5079783ee9b03ed954d7e92850ed787a22f7803574457df03ab3 extends Twig_Template
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
        // line 1
        if ((isset($context["error"]) ? $context["error"] : null)) {
            // line 2
            echo "\t<div>";
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["error"]) ? $context["error"] : null), "message", array()), "html", null, true);
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
        echo twig_escape_filter($this->env, (isset($context["last_username"]) ? $context["last_username"] : null), "html", null, true);
        echo "\" />
\t
\t<label for=\"password\">Password:</label>
\t<input type=\"password\" id=\"password\" name=\"_password\" />
\t
\t<button type=\"submit\">login</button>
</form>";
    }

    public function getTemplateName()
    {
        return "@EnsJobeet/Default/login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  35 => 7,  30 => 5,  27 => 4,  21 => 2,  19 => 1,);
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
