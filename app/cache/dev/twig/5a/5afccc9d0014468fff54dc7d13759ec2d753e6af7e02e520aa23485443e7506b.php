<?php

/* @EnsJobeet/Default/login.html.twig */
class __TwigTemplate_c2de5002ed343ae134daebbcfc87051b4655d8f04aba8478fb6b56b024d82cc6 extends Twig_Template
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
        $__internal_676b2ac1b7f024ff6d3d81d7b2c8d4b48d7520a0ee0349a20737b98112d96534 = $this->env->getExtension("native_profiler");
        $__internal_676b2ac1b7f024ff6d3d81d7b2c8d4b48d7520a0ee0349a20737b98112d96534->enter($__internal_676b2ac1b7f024ff6d3d81d7b2c8d4b48d7520a0ee0349a20737b98112d96534_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@EnsJobeet/Default/login.html.twig"));

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
        
        $__internal_676b2ac1b7f024ff6d3d81d7b2c8d4b48d7520a0ee0349a20737b98112d96534->leave($__internal_676b2ac1b7f024ff6d3d81d7b2c8d4b48d7520a0ee0349a20737b98112d96534_prof);

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
