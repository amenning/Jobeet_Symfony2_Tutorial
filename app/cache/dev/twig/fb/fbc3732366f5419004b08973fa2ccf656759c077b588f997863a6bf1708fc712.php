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
        $__internal_acc44499ed7c41cd87e9e7ecb5a44ef47fdf3c87f873eb11bffd93a3644a635c = $this->env->getExtension("native_profiler");
        $__internal_acc44499ed7c41cd87e9e7ecb5a44ef47fdf3c87f873eb11bffd93a3644a635c->enter($__internal_acc44499ed7c41cd87e9e7ecb5a44ef47fdf3c87f873eb11bffd93a3644a635c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_acc44499ed7c41cd87e9e7ecb5a44ef47fdf3c87f873eb11bffd93a3644a635c->leave($__internal_acc44499ed7c41cd87e9e7ecb5a44ef47fdf3c87f873eb11bffd93a3644a635c_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_321b09dfaf1c52a0ed5f8377637a26335eaebc23a9177e95dccc9617c6b48683 = $this->env->getExtension("native_profiler");
        $__internal_321b09dfaf1c52a0ed5f8377637a26335eaebc23a9177e95dccc9617c6b48683->enter($__internal_321b09dfaf1c52a0ed5f8377637a26335eaebc23a9177e95dccc9617c6b48683_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_321b09dfaf1c52a0ed5f8377637a26335eaebc23a9177e95dccc9617c6b48683->leave($__internal_321b09dfaf1c52a0ed5f8377637a26335eaebc23a9177e95dccc9617c6b48683_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_c0f2fd4cc0c093711136c2714b338049343996329eef46a3083a6af3b5b12e67 = $this->env->getExtension("native_profiler");
        $__internal_c0f2fd4cc0c093711136c2714b338049343996329eef46a3083a6af3b5b12e67->enter($__internal_c0f2fd4cc0c093711136c2714b338049343996329eef46a3083a6af3b5b12e67_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_c0f2fd4cc0c093711136c2714b338049343996329eef46a3083a6af3b5b12e67->leave($__internal_c0f2fd4cc0c093711136c2714b338049343996329eef46a3083a6af3b5b12e67_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_c81765bf42d17c19bf4fb3737f4a9cb35ae5f1dd738f6cafe4bfdfae293e4a26 = $this->env->getExtension("native_profiler");
        $__internal_c81765bf42d17c19bf4fb3737f4a9cb35ae5f1dd738f6cafe4bfdfae293e4a26->enter($__internal_c81765bf42d17c19bf4fb3737f4a9cb35ae5f1dd738f6cafe4bfdfae293e4a26_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_c81765bf42d17c19bf4fb3737f4a9cb35ae5f1dd738f6cafe4bfdfae293e4a26->leave($__internal_c81765bf42d17c19bf4fb3737f4a9cb35ae5f1dd738f6cafe4bfdfae293e4a26_prof);

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
