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
        $__internal_e9c30a172dbd30098ed590a6ee933d44d310b0c656fc8b227b27471b92197f66 = $this->env->getExtension("native_profiler");
        $__internal_e9c30a172dbd30098ed590a6ee933d44d310b0c656fc8b227b27471b92197f66->enter($__internal_e9c30a172dbd30098ed590a6ee933d44d310b0c656fc8b227b27471b92197f66_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9c30a172dbd30098ed590a6ee933d44d310b0c656fc8b227b27471b92197f66->leave($__internal_e9c30a172dbd30098ed590a6ee933d44d310b0c656fc8b227b27471b92197f66_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_c15798f88fd15e059aff599afc5e48b0b1fa87cead45656f78fcef630669a425 = $this->env->getExtension("native_profiler");
        $__internal_c15798f88fd15e059aff599afc5e48b0b1fa87cead45656f78fcef630669a425->enter($__internal_c15798f88fd15e059aff599afc5e48b0b1fa87cead45656f78fcef630669a425_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_c15798f88fd15e059aff599afc5e48b0b1fa87cead45656f78fcef630669a425->leave($__internal_c15798f88fd15e059aff599afc5e48b0b1fa87cead45656f78fcef630669a425_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_fb631937f1ae5eeafc6f8a8daee75c164a434237477a891c514631e9a56daec4 = $this->env->getExtension("native_profiler");
        $__internal_fb631937f1ae5eeafc6f8a8daee75c164a434237477a891c514631e9a56daec4->enter($__internal_fb631937f1ae5eeafc6f8a8daee75c164a434237477a891c514631e9a56daec4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_fb631937f1ae5eeafc6f8a8daee75c164a434237477a891c514631e9a56daec4->leave($__internal_fb631937f1ae5eeafc6f8a8daee75c164a434237477a891c514631e9a56daec4_prof);

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
