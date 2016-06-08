<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_79e0ae89bd2a74e65a21829a77e371eb1fdb0b7b94ec0087fc9e4f557bc5f4ea extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_eae62f57d4736aaa8ecfc63a09d912be2a771dfb7faf457b5d7baf3185d308b3 = $this->env->getExtension("native_profiler");
        $__internal_eae62f57d4736aaa8ecfc63a09d912be2a771dfb7faf457b5d7baf3185d308b3->enter($__internal_eae62f57d4736aaa8ecfc63a09d912be2a771dfb7faf457b5d7baf3185d308b3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_eae62f57d4736aaa8ecfc63a09d912be2a771dfb7faf457b5d7baf3185d308b3->leave($__internal_eae62f57d4736aaa8ecfc63a09d912be2a771dfb7faf457b5d7baf3185d308b3_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_40e918c4c144fc5dfe5a7ef3feece896663bc5fa32061b51a10c8ed865419a02 = $this->env->getExtension("native_profiler");
        $__internal_40e918c4c144fc5dfe5a7ef3feece896663bc5fa32061b51a10c8ed865419a02->enter($__internal_40e918c4c144fc5dfe5a7ef3feece896663bc5fa32061b51a10c8ed865419a02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_40e918c4c144fc5dfe5a7ef3feece896663bc5fa32061b51a10c8ed865419a02->leave($__internal_40e918c4c144fc5dfe5a7ef3feece896663bc5fa32061b51a10c8ed865419a02_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_97babc64f6c26c44acec8a4193b9ab94bd48e21d15063666e42f24430bcf9db4 = $this->env->getExtension("native_profiler");
        $__internal_97babc64f6c26c44acec8a4193b9ab94bd48e21d15063666e42f24430bcf9db4->enter($__internal_97babc64f6c26c44acec8a4193b9ab94bd48e21d15063666e42f24430bcf9db4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_97babc64f6c26c44acec8a4193b9ab94bd48e21d15063666e42f24430bcf9db4->leave($__internal_97babc64f6c26c44acec8a4193b9ab94bd48e21d15063666e42f24430bcf9db4_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
