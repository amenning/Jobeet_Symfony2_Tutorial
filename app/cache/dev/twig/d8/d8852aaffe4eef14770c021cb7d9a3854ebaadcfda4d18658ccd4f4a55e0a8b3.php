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
        $__internal_a1fd22ec0d0f74489487637e712209df6fb328ca77c3c880695af1209d0de35c = $this->env->getExtension("native_profiler");
        $__internal_a1fd22ec0d0f74489487637e712209df6fb328ca77c3c880695af1209d0de35c->enter($__internal_a1fd22ec0d0f74489487637e712209df6fb328ca77c3c880695af1209d0de35c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a1fd22ec0d0f74489487637e712209df6fb328ca77c3c880695af1209d0de35c->leave($__internal_a1fd22ec0d0f74489487637e712209df6fb328ca77c3c880695af1209d0de35c_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_8031056cff7a9b6e9fe5676362da4a60ce66d137bd947c1309b5658c0fc3b1f3 = $this->env->getExtension("native_profiler");
        $__internal_8031056cff7a9b6e9fe5676362da4a60ce66d137bd947c1309b5658c0fc3b1f3->enter($__internal_8031056cff7a9b6e9fe5676362da4a60ce66d137bd947c1309b5658c0fc3b1f3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_8031056cff7a9b6e9fe5676362da4a60ce66d137bd947c1309b5658c0fc3b1f3->leave($__internal_8031056cff7a9b6e9fe5676362da4a60ce66d137bd947c1309b5658c0fc3b1f3_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_e653ae73e66edcc3f4c95b30d6ba33210358a0b2afa235f7c2a5204b859bd02a = $this->env->getExtension("native_profiler");
        $__internal_e653ae73e66edcc3f4c95b30d6ba33210358a0b2afa235f7c2a5204b859bd02a->enter($__internal_e653ae73e66edcc3f4c95b30d6ba33210358a0b2afa235f7c2a5204b859bd02a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_e653ae73e66edcc3f4c95b30d6ba33210358a0b2afa235f7c2a5204b859bd02a->leave($__internal_e653ae73e66edcc3f4c95b30d6ba33210358a0b2afa235f7c2a5204b859bd02a_prof);

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
