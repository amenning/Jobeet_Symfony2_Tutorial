<?php

/* @WebProfiler/Collector/router.html.twig */
class __TwigTemplate_dc23f18f32465427fb0e1136e0172e5d7a95bb25e2967c7847d38f9dab0dc028 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_98239a8bdd1fad39204a54b06c9d49fdce31f0dda9c21976bac67c2fef392def = $this->env->getExtension("native_profiler");
        $__internal_98239a8bdd1fad39204a54b06c9d49fdce31f0dda9c21976bac67c2fef392def->enter($__internal_98239a8bdd1fad39204a54b06c9d49fdce31f0dda9c21976bac67c2fef392def_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_98239a8bdd1fad39204a54b06c9d49fdce31f0dda9c21976bac67c2fef392def->leave($__internal_98239a8bdd1fad39204a54b06c9d49fdce31f0dda9c21976bac67c2fef392def_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_529af3fb3f47893713ec0320739152c66cb36029c0c19e9797ccdad3eadc9c87 = $this->env->getExtension("native_profiler");
        $__internal_529af3fb3f47893713ec0320739152c66cb36029c0c19e9797ccdad3eadc9c87->enter($__internal_529af3fb3f47893713ec0320739152c66cb36029c0c19e9797ccdad3eadc9c87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_529af3fb3f47893713ec0320739152c66cb36029c0c19e9797ccdad3eadc9c87->leave($__internal_529af3fb3f47893713ec0320739152c66cb36029c0c19e9797ccdad3eadc9c87_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_35b706f63be368b7217a667628987c56832dad577a076c73ebacb87530113491 = $this->env->getExtension("native_profiler");
        $__internal_35b706f63be368b7217a667628987c56832dad577a076c73ebacb87530113491->enter($__internal_35b706f63be368b7217a667628987c56832dad577a076c73ebacb87530113491_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_35b706f63be368b7217a667628987c56832dad577a076c73ebacb87530113491->leave($__internal_35b706f63be368b7217a667628987c56832dad577a076c73ebacb87530113491_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c1d4fc490cf97c159e2ff58f8d5a010983305744aea57cc9eb468fd8875a8387 = $this->env->getExtension("native_profiler");
        $__internal_c1d4fc490cf97c159e2ff58f8d5a010983305744aea57cc9eb468fd8875a8387->enter($__internal_c1d4fc490cf97c159e2ff58f8d5a010983305744aea57cc9eb468fd8875a8387_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c1d4fc490cf97c159e2ff58f8d5a010983305744aea57cc9eb468fd8875a8387->leave($__internal_c1d4fc490cf97c159e2ff58f8d5a010983305744aea57cc9eb468fd8875a8387_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Collector/router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
